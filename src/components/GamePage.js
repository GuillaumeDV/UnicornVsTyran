import React, { Component } from 'react';
import ButtonBack from './ButtonBack'
import Dictators from './Dictators'


import '../assets/GamePage.css';
import { Link } from 'react-router-dom';

class GamePage extends Component{
    render(){   
        return(
            <div>
                <section>
                    <Link to="/">
                        <ButtonBack />
                    </Link>                        
                        <Dictators />
                        <Dictators />
                        <Dictators />

                </section>
            </div>
        )

    }
}

export default GamePage