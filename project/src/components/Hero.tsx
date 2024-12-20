import React from 'react';
import { ArrowRight } from 'lucide-react';
import AnimatedCard from './AnimatedCard';

export default function Hero() {
  return (
    <section className="min-h-[80vh] pt-32 pb-20 bg-gray-900 text-white flex items-center">
      <div className="max-w-7xl mx-auto px-6">
        <AnimatedCard>
          <div className="max-w-3xl">
            <h1 className="text-6xl font-bold mb-6 bg-gradient-to-r from-red-500 to-red-300 bg-clip-text text-transparent">
              Innovate. Transform. Succeed.
            </h1>
            <p className="text-xl text-gray-400 mb-8">
              Empowering businesses with cutting-edge technology solutions that drive growth 
              and innovation in the digital age.
            </p>
            <button className="group bg-red-500 hover:bg-red-600 px-8 py-4 rounded-lg flex items-center gap-2 transition-all duration-300 hover:translate-x-2">
              Explore Our Solutions
              <ArrowRight className="group-hover:translate-x-1 transition-transform duration-300" size={20} />
            </button>
          </div>
        </AnimatedCard>
      </div>
    </section>
  );
}