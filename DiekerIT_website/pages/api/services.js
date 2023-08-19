import { NextApiRequest, NextApiResponse } from 'next'

const services = [
  {
    id: 1,
    title: 'Infrastructure and Client Monitoring',
    description: 'We provide top-notch infrastructure and client monitoring services to ensure your IT systems are running smoothly and efficiently.',
  },
  {
    id: 2,
    title: 'Backup Solutions',
    description: 'Our backup solutions ensure your data is safe and can be recovered quickly in case of any unforeseen incidents.',
  },
  {
    id: 3,
    title: 'Network Monitoring',
    description: 'We monitor your network to detect and fix any issues before they can affect your business operations.',
  },
  {
    id: 4,
    title: 'Microsoft Products',
    description: 'As a Microsoft expert, we specialize in various Microsoft products, solutions, and processes.',
  },
  {
    id: 5,
    title: 'Client Management',
    description: 'We manage your clients to ensure they are satisfied and their needs are met.',
  },
  {
    id: 6,
    title: 'Infrastructure Monitoring',
    description: 'We monitor your IT infrastructure to ensure it is performing optimally and any issues are detected and fixed promptly.',
  },
]

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  res.status(200).json(services)
}