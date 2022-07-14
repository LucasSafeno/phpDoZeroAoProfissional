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


    this.comer = function(kg){
        console.log("hmm...")
        this.peso = this.peso + (kg/2)
    }// comer()


}// Animal


var sunny = new Animal()