import React, { Component } from 'react';
import ButtonBack from './ButtonBack'
import Dictators from './Dictators'


import '../assets/GamePage.css';
import { Link } from 'react-router-dom';

class GamePage extends Component{
    render(){   
        return(
            <div>
                <section className="backgroudColorGame">
                    <Link to="/">
                        <ButtonBack />
                    </Link>                        
                        <Dictators />
                       
                        {/* <Array /> */}

                </section>
            </div>
        )

    }
}

export default GamePage