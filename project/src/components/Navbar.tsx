import React from 'react';
import { Link } from 'react-router-dom';
import { User } from 'lucide-react';

export default function Navbar() {
  return (
    <nav className="bg-gray-900 text-white py-4 px-6 fixed w-full top-0 z-50">
      <div className="max-w-7xl mx-auto flex justify-between items-center">
        <Link to="/" className="text-2xl font-bold text-red-500 hover:text-red-400 transition-colors">
          FADTECH
        </Link>
        <Link
          to="/login"
          className="flex items-center gap-2 bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition-colors"
        >
          <User size={20} />
          <span>Login</span>
        </Link>
      </div>
    </nav>
  );
}