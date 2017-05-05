Game.Preloader = function (game) {
   this.preloadbar = null;
};


Game.Preloader.prototype = {
    preload : function () {
        
        
        //ASSETS
        this.load.tilemap('map', 'assets/level1.csv');
        this.load.image('tileset', 'assets/tileset.png');
        
        
        //player asset
        this.load.spritesheet('player', 'assets/player.png', 24, 26);
        
    },
    
    
    create : function () {
        this.state.start('level1');
    }
    
    
    
    
};