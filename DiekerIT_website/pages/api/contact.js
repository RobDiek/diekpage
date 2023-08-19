import { submitContactForm } from '../../../js/main.js';

export default async (req, res) => {
  if (req.method === 'POST') {
    const { name, email, message } = req.body;

    try {
      await submitContactForm(name, email, message);
      res.status(200).json({ status: 'Success', message: 'Your message has been sent. Thank you!' });
    } catch (error) {
      res.status(500).json({ status: 'Error', message: 'Something went wrong. Please try again later.' });
    }
  } else {
    res.status(405).json({ status: 'Error', message: 'Method not allowed.' });
  }
};