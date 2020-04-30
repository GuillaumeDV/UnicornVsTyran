import React, { Component } from 'react';
import ButtonBack from './ButtonBack'

import '../assets/GamePage.css';
import { Link } from 'react-router-dom';

class GamePage extends Component{
    render(){   
        return(
            <div>
                <section className="backgroudColor">
                    <Link to="/">
                        <ButtonBack />
                    </Link>
                </section>
            </div>
        )

    }
}

export default GamePage