import React from 'react'

import '../assets/Dictators.css'

const Card = (props) => {
  console.log(props);
    return (
        <div className="container-photo">
                <figure className="photo">
                     <img src={props.img && props.img} alt="Dictator card"></img>               

                </figure> 

        </div>
    );
  }

export default Card


