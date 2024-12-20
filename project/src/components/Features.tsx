import React from 'react';
import { Code, Shield, Zap, ArrowRight } from 'lucide-react';
import AnimatedCard from './AnimatedCard';

const features = [
  {
    icon: <Code size={32} />,
    title: 'Smart Development',
    description: 'Building intelligent solutions that adapt to your business needs.'
  },
  {
    icon: <Shield size={32} />,
    title: 'Enhanced Security',
    description: 'Protecting your digital assets with advanced security measures.'
  },
  {
    icon: <Zap size={32} />,
    title: 'Peak Performance',
    description: 'Delivering blazing-fast solutions that scale with your growth.'
  }
];

export default function Features() {
  return (
    <section className="py-20 bg-gray-100">
      <div className="max-w-7xl mx-auto px-6">
        <h2 className="text-4xl font-bold text-center mb-16 text-gray-800">
          Our Expertise
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {features.map((feature, index) => (
            <AnimatedCard key={index} delay={index * 200}>
              <div className="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group">
                <div className="text-red-500 mb-4 transform group-hover:scale-110 transition-transform duration-300">
                  {feature.icon}
                </div>
                <h3 className="text-xl font-bold mb-2 text-gray-800">{feature.title}</h3>
                <p className="text-gray-600 mb-4">{feature.description}</p>
                <button className="text-red-500 flex items-center gap-2 group-hover:gap-3 transition-all duration-300">
                  Learn More
                  <ArrowRight size={16} />
                </button>
              </div>
            </AnimatedCard>
          ))}
        </div>
      </div>
    </section>
  );
}