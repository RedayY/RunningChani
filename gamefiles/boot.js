//declaring phaser game
var Game = {};

//game boot function using game var
Game.boot = function (game) {
    
};

//phaser var initizes protypes
Game.boot.prototype = {
    init : function () {
        
        this.input.maxPointers = 1;
        
        this.stage.disableVisibilityChange = true;
  
    },
        //phaser functions contain update preload and create
        preload: function () {   
        },
    
    create: function () {
        
        this.state.start('Preloader');
    }
};