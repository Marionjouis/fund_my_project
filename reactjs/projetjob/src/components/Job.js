import React, {Component} from 'react';

class Job extends Component {
    render() {
        const Job =this.props.job;




        return (
            <div>
            <article className='job-list'>
               <h2>{Job.title}</h2>
                <h3>{Job.company}</h3>
                <h3>{Job.createdAt}</h3>
                <p>Offre ajoutée le {moment().format("MMM Do YY")};</p>

            </article>

            </div>
        );
    }
}

export default Job;