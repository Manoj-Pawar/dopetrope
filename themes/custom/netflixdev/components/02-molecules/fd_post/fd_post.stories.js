import post from './fd_post.twig';

import postData from './fd_post.yml';

export default { title: 'Molecules/FD_Post' };

export const fdPost = () => post(postData);
