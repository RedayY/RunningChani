Game.level2 = function (game) {};

//variables

var map;
var layer;

var player;
var controls = {};

var playerSpeed = 150;
var jumpTimer = 0;
var CoinCount = 0;
var scoreText;
var is_finished;



Game.level2.prototype = {
    
    
    
    //Death
    resetplayer:function(){
        player.reset(40,50);
    },
    
    //Score
     getCoin:function(){
        map.putTile(-1,layer.getTileX(player.x), layer.getTileY(player.y));
        CoinCount += 1;
        scoreText.text = 'Cookie Score: ' + CoinCount;
         
    },
    
    //Finish
    victory_level:function(){
        this.state.start('Preloader3');
    },
    
    create:function(){

        // Map Properties
        this.stage.backgroundColor = '#00bfff';
        this.physics.arcade.gravity.y = 1400;       
        map = this.add.tilemap('map', 32, 32);
        map.addTilesetImage('tileset');
        layer = map.createLayer(0);
        layer.resizeWorld();
        map.setCollisionBetween(0,19);
        
        //Object Properties
        map.setTileIndexCallback(16,this.resetplayer,this);
        map.setTileIndexCallback(20,this.getCoin,this);
        map.setTileIndexCallback(4,this.victory_level,this);
        scoreText = this.add.text(40, 40, 'Cookie Score: ', { fontSize: '32px', fill: '#000' });
        scoreText.fixedToCamera = true;
        
        
        //Player Properties and Camera Settings
        player = this.add.sprite(40,50,'player');
        player.anchor.setTo(0.5,0.5);
        player.animations.add('idle', [0,1], 1, true);
        player.animations.add('jump', [0,2], 1, true);
        player.animations.add('run', [3,4,5,6,7,8], 20, true);
        this.physics.arcade.enable(player);
        this.camera.follow(player);
        player.body.collideWorldBounds = true;
        
        //Player Controls Object
        controls = {
            right: this.input.keyboard.addKey(Phaser.Keyboard.RIGHT),
            left: this.input.keyboard.addKey(Phaser.Keyboard.LEFT),
            up: this.input.keyboard.addKey(Phaser.Keyboard.UP),
            down: this.input.keyboard.addKey(Phaser.Keyboard.DOWN)
        };

        
    },
    
    update: function () {
        
        //updates score per tick
        display_highscore();
        
        //Gravity Arcade Physics
        this.physics.arcade.collide(player,layer);
        
        //resets velocity pre gametick (framerate)
        player.body.velocity.x = 0;
        
        
        //Button Control + Animations
        if(controls.up.isDown){
            player.animations.play('jump');
        }
        
        if(controls.right.isDown){
            player.animations.play('run');
            player.scale.setTo(1,1);
            player.body.velocity.x += playerSpeed;
        }
        
        if(controls.left.isDown){
            player.animations.play('run');
            player.scale.setTo(-1,1);
            player.body.velocity.x -= playerSpeed;
        }
        
        if(controls.down.isDown){
            player.animations.play('idle');
            player.body.velocity.x = 0;
        }
        
        if(controls.up.isDown && (player.body.onFloor() || player.body.touching.down) && this.time.now > jumpTimer){
            player.body.velocity.y = -600;
            jumpTimer = this.time.now +750;
        }
        
        if(player.body.velocity.x == 0 && player.body.velocity.y == 0 && player.body.onFloor()){
            player.animations.play('idle');
        }
        
      
       
        
    }    
}
    
