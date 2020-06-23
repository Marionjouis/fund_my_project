import React, {Component} from 'react';

class PageAddjob extends Component {
    render() {
        return (
            <div>
                <h1>Ajouter une offre</h1>
                <form className='Addjob'>
                    <input className="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        <input className="form-control" type="text" placeholder="Default input">
                            <input className="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                </form>
            </div>
        );
    }
}

export default PageAddjob;