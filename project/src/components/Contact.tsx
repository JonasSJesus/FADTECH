import React from 'react';
import { Mail, Phone, MapPin } from 'lucide-react';

const contactInfo = [
  {
    icon: <Mail size={24} />,
    title: 'Email',
    detail: 'contact@fadtech.com'
  },
  {
    icon: <Phone size={24} />,
    title: 'Phone',
    detail: '+1 (555) 123-4567'
  },
  {
    icon: <MapPin size={24} />,
    title: 'Address',
    detail: '123 Tech Street, Silicon Valley'
  }
];

export default function Contact() {
  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-6">
        <h2 className="text-3xl font-bold text-center mb-12 text-gray-800">Get in Touch</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {contactInfo.map((item, index) => (
            <div key={index} className="flex flex-col items-center text-center p-6">
              <div className="text-red-500 mb-4">{item.icon}</div>
              <h3 className="text-xl font-bold mb-2 text-gray-800">{item.title}</h3>
              <p className="text-gray-600">{item.detail}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}