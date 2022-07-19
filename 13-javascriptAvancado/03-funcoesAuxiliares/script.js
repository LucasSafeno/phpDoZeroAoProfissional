function Animal(){


    //Proriedades
    this.raca   =   "Cao"
    this.nome   =   "Sunny"
    this.idade  =   5
    this.peso   =   10

    // Funções/Metodos]

    this.fazerXixi = function(){
        console.log("xiiiiii....")
    }// fazerXixi()


    // Funções Auxiliares

    this.comer = function(kg){
        for(var i=0;i<kg;i++){
            this.mastigar(i);
        }
        console.log("hmm...");
        this.peso = this.peso + (kg/2);
        
    }// comer()

    this.mastigar = function(i){
        console.log(i + " mastigando...");
    } // mastigar()

    


}// Animal

var lulu = new Animal();