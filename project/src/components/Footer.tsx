import React from 'react';

export default function Footer() {
  return (
    <footer className="bg-gray-900 text-white py-8">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center">
          <h3 className="text-xl font-bold text-red-500 mb-4">FADTECH</h3>
          <p className="text-gray-400">
            © {new Date().getFullYear()} FADTECH. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  );
}