const result = 5
console.log("Mon résultat est " + result)
class Utilisateur{
    constructor(nom,prenom,civilite){
        this.nom = nom
        this.prenom=prenom
        this.civilite=civilite
    }
}

const tafa = new Utilisateur("Rakel","Tafa","Homme")
const lagroud = new Utilisateur("Lagroud","Kilianours","Milimulou enragé")
const tab = [tafa,lagroud]
function printUser(myuser){
   return `\nPrenom : ${myuser.prenom}\nNom : ${myuser.nom}\nCivilité : ${myuser.civilite}`
}

function printTabUser(tab){
    tab.forEach(element => {
        console.log(printUser(element))
    });

}

printTabUser(tab)
