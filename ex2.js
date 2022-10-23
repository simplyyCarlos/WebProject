class Aliment{
    constructor(nom,type){
        this.nom = nom
        this.type = type
    }
}

class Panier{
    constructor(){
        this.list = []
    }
    addAliment(Aliment){
        this.list.push(Aliment)

    }
    getPanier(){
        return this.list
    }
    countAliment(){
        return this.list.length
    }
    addAliment(...Aliment){
        Aliment.forEach(element => {
            this.list.push(element)
        })
    }
    suppAliment(name){
        this.list.splice(this.list.findIndex(element => element.nom === name))
    }
    nameAllType(type){
        
        this.list.filter(element => element.type === type)
        console.log(`Les noms des éléments de type ${type} sont : `)
        this.list.filter(element => element.type === type).forEach(element => {
            console.log(`\n${element.nom}`)
        })

    } 
}

const alim1 = new Aliment("banane","fruit")
const alim2 = new Aliment("Courgette","Légume")
const myPanier = new Panier()
myPanier.addAliment(alim1)
myPanier.addAliment(alim2)

myPanier.addAliment(
    new Aliment("pomme", "fruit"),
    new Aliment("poire", "fruit"),
    new Aliment("peche", "fruit"),
    new Aliment("abricot", "fruit"),
    new Aliment("concombre", "legume"),
    new Aliment("courgette", "legume"),
    new Aliment("salade", "legume")
)

console.log(myPanier.countAliment())
myPanier.nameAllType("fruit")