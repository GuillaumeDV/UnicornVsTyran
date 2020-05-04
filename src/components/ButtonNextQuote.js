import React from 'react'
import './ButtonNextQuote.css'

class ButtonNextQuote extends React.Component {
    render() {
        return(
            <div className="quote-next">
                <button className= 'button-next-quote' type= 'button'>
                    Next Quote
                </button>
            </div>
        )
    }
}

export default ButtonNextQuote

