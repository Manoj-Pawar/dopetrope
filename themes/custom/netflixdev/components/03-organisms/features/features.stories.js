import features from './features.twig';

import featuresData from './features.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Features' };

export const Features = () => features(featuresData);
