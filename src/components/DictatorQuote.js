import React from 'react'

import './DictatorQuote.css'

function DictatorQuote(props) {
    console.log(props);
    return (
        <figure className="dictator-quote">
            <figcaption>
               <blockquote>{props.quote && props.quote.citation}</blockquote> 
            </figcaption>
        </figure>
    );
}

export default DictatorQuote
