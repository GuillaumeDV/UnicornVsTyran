import React from 'react';
import '../assets/Dictators.css';
import Dictators from '../assets/images/dictateurs/assadcaca.gif';



function DictatorCard(props) {
  console.log(props);
  // const link=props.img ?`..${props.img}`:null
  // console.log(link)
    return (    
        <div className="dictator-gif"> 
            {/* <img src={props.img && props.img} alt={props.name} />  */}
            <img src={props.img && props.img} />
            <img src={Dictators} />
        </div>

    );
  }

export default DictatorCard