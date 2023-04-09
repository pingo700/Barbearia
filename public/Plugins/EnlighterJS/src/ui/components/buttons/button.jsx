// ----------------------------------------------------------------------
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.
// --
// Copyright 2016-2020 Andi Dittrich <https://andidittrich.de>
// ----------------------------------------------------------------------

// Internal "ReactDOM"
import * as React from 'dom-magic';
import {Tooltip} from './tooltip.jsx';

export function Button(props){

    // button css classes
    const classes = ['enlighter-btn'];

    // name set ?
    if (props.name){
        classes.push('enlighter-btn-' + props.name);
    }

    // create button
    return <div 
            className={classes.join(' ')} 
            onClick={props.onClick}
        >
            {props.text||null}
            { (typeof props.tooltip == 'string' ? <Tooltip text={props.tooltip}/> : props.tooltip) || null }
        </div>
}