import React, { Component } from 'react';
import DictatorQuote from './DictatorQuote'
import Dictator from './Dictators';
import ButtonBack from './ButtonBack';


import '../assets/GamePage.css';
import '../assets/HomePage.css';
import { Link } from 'react-router-dom';

class GamePage extends Component{
    render(){   
        return(
            <div className="backgroudColorGame">
             <header className="header">
                <h1><span className="capital">U</span>nicorn vs <span className="capital">T</span>yran-nosaurus</h1>
             </header>               
                  <DictatorQuote />
                    <Dictator />
                     <Link to="/" style={{ textDecoration: 'none' }}>
                    <ButtonBack />
                </Link>
            <footer className="footer">
            <p>&copy; : anaïs, guillaume, sandrine, jimmy, jérémie, veronica</p>
            </footer>
            </div>
        )

    }
}

export default GamePage