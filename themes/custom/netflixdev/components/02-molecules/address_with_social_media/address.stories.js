import address from './address.twig';
import addressData from './address.yml';

// defination

export default { title: 'Molecules/Address with social media' };

export const Address = () => address(addressData);
