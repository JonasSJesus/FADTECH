import React from 'react';

interface AnimatedCardProps {
  children: React.ReactNode;
  delay?: number;
}

export default function AnimatedCard({ children, delay = 0 }: AnimatedCardProps) {
  return (
    <div 
      className="opacity-0 translate-y-4 animate-fade-in"
      style={{ 
        animationDelay: `${delay}ms`,
        animationFillMode: 'forwards'
      }}
    >
      {children}
    </div>
  );
}