//
//  ViewController.swift
//  mathquiz
//
//  Created by Howel Lee on 21/7/22.
//

import UIKit

class ViewController: UIViewController {
    
    var questions: [Question] = []
    var progress = 0 // to keep track of user's progress
    var score = 0 // to keep track of user's score

    @IBOutlet weak var lblQuestion: UILabel!
    @IBOutlet weak var txtAnswer: UITextField!
    @IBOutlet weak var lblScore: UILabel!
    
    @IBAction func bnSubmit(_ sender: Any) {
        if txtAnswer.text != "" {
            
        // retrieve the text from the text field, need to unwrap to retrieve the value
        // also convert that value from String data type to Int data type
            let userResponse = Int(txtAnswer.text!)!
            
        // check if the user has typed the correct answer
            if userResponse == questions[progress].answer {
                score += 1 // increase score by 1
                
            // update the score label
                lblScore.text = "Your score: \(score)"
        }
            lblScore.text = "Your score: \(score)"
            if progress != 4{
                progress += 1
                lblQuestion.text = questions[progress].question
            }
            // otherwise, inform user that the quiz has ended and
            //display the final score
            else{
                let alert = UIAlertController(title: "Quiz ended", message: "Your final score:\(score)/5", preferredStyle: .alert)
                alert.addAction(UIAlertAction(title: "OK", style: .default, handler: nil))
                present(alert, animated: true, completion: nil)
            }
    }
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        questions.append(Question(question: "What is 1 + 2?", answer:3))
        questions.append(Question(question: "What is 16 divide by 4?", answer: 4))
        questions.append(Question(question: "What is 18 - 4?", answer: 14))
        questions.append(Question(question: "What is the outcom for (20 - 2) / 5 * 3?", answer: 6))
        questions.append(Question(question: "What is 2 to the power of 5", answer: 32))
        
        lblQuestion.text = questions[0].question
        // Do any additional setup after loading the view.
       
    }
}
