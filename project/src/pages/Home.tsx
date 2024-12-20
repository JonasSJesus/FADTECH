import React from 'react';
import Hero from '../components/Hero';
import Features from '../components/Features';
import Contact from '../components/Contact';

export default function Home() {
  return (
    <div className="min-h-screen bg-white">
      <Hero />
      <Features />
      <Contact />
    </div>
  );
}