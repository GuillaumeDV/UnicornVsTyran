import React from 'react';
import ButtonNextQuote from './ButtonNextQuote'

import './DictatorQuote.css'

function DictatorQuote(props) {
    //console.log(props);
    return (    
        <div className="conteneur-quote">
            <div className="dictator-quote">
                {props.quote && props.quote.citation}                   
            </div>
            <ButtonNextQuote onClick={props.getDictator} /> 
        </div>
    );
}

export default DictatorQuote
