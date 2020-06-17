require('./bootstrap');

import 'whatwg-fetch';
var tada = require('@fallroot/tada').default;

// fontawesome
import { library, dom } from '@fortawesome/fontawesome-svg-core'
import {
    faChevronRight,
} from '@fortawesome/free-solid-svg-icons'
import {
    faComment
} from '@fortawesome/free-regular-svg-icons'
import { faTwitter, faGoogle } from '@fortawesome/free-brands-svg-icons'
library.add(
    faChevronRight,
    faComment,
    faTwitter,
    faGoogle
)
dom.watch()

$(() => {
    tada.add('img[data-src]');
});