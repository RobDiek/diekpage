import { NextApiRequest, NextApiResponse } from 'next'

const handler = (req: NextApiRequest, res: NextApiResponse) => {
  const aboutInfo = {
    title: 'About DiekerIT',
    description: 'DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes.',
    specialties: 'Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.'
  }

  res.status(200).json(aboutInfo)
}

export default handler