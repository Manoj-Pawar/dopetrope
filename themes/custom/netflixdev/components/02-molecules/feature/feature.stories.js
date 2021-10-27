import feature from './feature.twig';

import featureData from './feature.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Feature' };

export const Feature = () => feature(featureData);
