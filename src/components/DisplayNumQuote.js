import React from 'react'
import './DisplayNumQuote.css'

class DisplayNumQuote extends React.Component {
    render() {
        return(
            <div className= 'contains-display-num-quote'>
                <button className= 'display-num-quote' type= 'button'><strong>X/X</strong></button>
            </div>
        )
    }
}

export default DisplayNumQuote

