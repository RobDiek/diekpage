import { siteTitle, siteDescription, siteLogo, siteBanner } from '../../../shared/variables';

export default function handler(req, res) {
  const companyInfo = {
    title: siteTitle,
    description: siteDescription,
    logo: siteLogo,
    banner: siteBanner,
    about: 'DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes.',
    specialties: 'Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.'
  };

  if (req.method === 'GET') {
    res.status(200).json(companyInfo);
  } else {
    res.setHeader('Allow', ['GET']);
    res.status(405).end(`Method ${req.method} Not Allowed`);
  }
}