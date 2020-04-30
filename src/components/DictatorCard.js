import React from 'react'

import '../assets/Dictators.css'

const Card = ({img}) => {
    return (
        <div className="container-photo">
                <figure className="photo">
                     <img src={img} alt="Dictator card"></img>               
                   {/*  <img src={lien} /> */}
                    <figcaption>
                        <p>{img.name}</p>
                    </figcaption>
                    <quote>{img.citation}</quote>
                </figure>

        </div>
    );
  }

export default Card


