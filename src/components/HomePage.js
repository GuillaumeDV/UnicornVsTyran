import React, { Component } from 'react';
import ButtonPlay from './ButtonPlay'

import '../assets/HomePage.css';
import { Link } from 'react-router-dom';

class HomePage extends Component{
    render(){   
        return(
            <div>
                <header className="header"><h1><span className="capital">U</span>nicorn vs <span className="capital">T</span>yran-nosaurus</h1></header>
                <section className="backgroudColor">
                    <Link to="/GamePage" style={{ textDecoration: 'none' }}>
                        <ButtonPlay /> 
                    </Link>
                    {/* <ButtonNextQuote /> */}
                    {/*<DisplayNumQuote />*/}
                </section>
                <footer className="footer">
                    <p>&copy; : anaïs, guillaume, virginie, jérémie, dani, veronica</p>
                </footer>
            </div>
        )

    }
}

export default HomePage