Game.Preloader4 = function (game) {
   this.preloadbar = null;
};


Game.Preloader4.prototype = {
    preload : function () {
        this.preloadbar = this.add.sprite(this.world.centerX,
                                         this.world.centerY, 'preloaderbar');
        this.preloadbar.anchor.setTo(0.5, 0.5);
        this.time.advancedTiming = true;
        this.load.setPreloadSprite(this.preloadbar);
        
        
        //ASSETS
        this.load.tilemap('map', 'assets/level4.csv');
        this.load.image('tileset', 'assets/tileset.png');
        
        
        //player asset
        this.load.spritesheet('player', 'assets/player.png', 24, 26);
        
    },
    
    
    create : function () {
        this.state.start('END');
    }
    
    
    
    
};