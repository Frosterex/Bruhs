//
//  ViewController.swift
//  price guesser app
//
//  Created by Howel Lee on 21/7/22.
//

import UIKit

class ViewController: UIViewController {
    
    var fruits: FruitBasket?
    var progress = 0 // to keep track of user's progress
    var score = 0 // to keep track of user's score
    
    @IBOutlet weak var lblFruit: UILabel!
    @IBOutlet weak var lblScore: UILabel!
    @IBOutlet weak var lblProgress: UILabel!
    
    @IBAction func btnResponse(_ sender: UIButton) {
        //this 'if' will be triggered if user had clicked on the 'Yes' button
        if sender.tag == 1 {
            if fruits!.basket[progress].price > 5{
                score += 1
            }
        }
        // this 'else' will be triggered if user had clicked on the 'No' button
        else{
            if fruits!.basket[progress].price <= 5{
                score += 1
            }
        }
        // update score label
        lblScore.text = "Score: \(score)"
        
        //increase progress counter
        progress += 1
        
        //update progress label
        lblProgress.text = "Progress: \(progress)/10"
        
        //change to the next Fruit
        if progress != 10{
            //change to the next Fruit
            lblFruit.text = fruits?.basket[progress].type
        }
        //otherwise, user has reached the end of the quiz
        else{
            //prepare score message for display
            var scoreMessage = ""
            if score >= 5{
                scoreMessage = "\nCongratulations! You pass!"
            }
            
            //create alert
            let alert = UIAlertController(title: "Quiz", message: "Score: \(score)/10 \(scoreMessage)", preferredStyle: .alert)
            let playButton = UIAlertAction(title: "Play again", style: .default, handler: nil)
            let exitButton = UIAlertAction(title: "Exit", style: .default, handler: nil)
            alert.addAction(playButton)
            alert.addAction(exitButton)
            
            present(alert, animated: true, completion: nil)
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
        //this will call the init function in FruitBasket class,
        //which will add the 10 fruits into the 'basket' property
        fruits = FruitBasket()
        
        lblFruit.text = fruits?.basket[0].type
        //this will get the 1st item (index 0) in the basket,
        //and retrieve its 'type' property
        //this property is then assigned as the text for the lblFruit label
        
        //display the user's score
        lblScore.text = "Score: \(score)"
        lblProgress.text = "Progress: \(progress)"
    }


}

