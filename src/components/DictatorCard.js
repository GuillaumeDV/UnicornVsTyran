import React from 'react'

import '../assets/Dictators.css'

function DictatorCard(props) {
  //console.log(props);
    return (    
        <div className="dictator-gif"> 
            {/* <img src={props.img && props.img} alt={props.name} />  */}
            <img src={props.img && props.img}  />            
        </div>

    );
  }

export default DictatorCard


