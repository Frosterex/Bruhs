//
//  FruitBasket.swift
//  price guesser app
//
//  Created by Howel Lee on 21/7/22.
//

import Foundation

class FruitBasket{
    var basket: [Fruit] = []
    
    init() {
        // add the inividual  fruits into the 'basket'
        basket.append(Fruit(type: "Cavedish Banana", price: 9.98))
        basket.append(Fruit(type: "Alphonso Mango", price: 5.98))
        basket.append(Fruit(type: "Fresho Green Grapes", price: 2.99))
        basket.append(Fruit(type: "Granny Apples", price: 4.98))
        basket.append(Fruit(type: "Angel Red Soft Seeded Pomegranate", price: 3.99))
        basket.append(Fruit(type: "Candy Red Apples", price: 5.25))
        basket.append(Fruit(type: "White Dragonfruit", price: 4.75))
        basket.append(Fruit(type: "Seedless Guava", price: 4.60))
        basket.append(Fruit(type: "Packham Pear South Africa", price: 3.95))
        basket.append(Fruit(type: "Fei Zi Xiao Lychee", price: 7.32))
    }
}
