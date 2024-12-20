import React, { useState } from 'react';
import { Lock, User } from 'lucide-react';
import AnimatedCard from '../components/AnimatedCard';

export default function Login() {
  const [formData, setFormData] = useState({
    username: '',
    password: ''
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    console.log('Login attempt:', formData);
  };

  return (
    <div className="min-h-screen bg-gray-100 pt-24 pb-12 flex items-center">
      <div className="max-w-md mx-auto px-6 w-full">
        <AnimatedCard>
          <div className="bg-white rounded-lg shadow-xl p-8">
            <h2 className="text-3xl font-bold text-center mb-8 bg-gradient-to-r from-red-500 to-red-300 bg-clip-text text-transparent">
              Welcome Back
            </h2>
            <form onSubmit={handleSubmit} className="space-y-6">
              <div>
                <label className="block text-gray-700 mb-2" htmlFor="username">
                  Username
                </label>
                <div className="relative group">
                  <input
                    type="text"
                    id="username"
                    className="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-300 group-hover:border-red-300"
                    placeholder="Enter your username"
                    value={formData.username}
                    onChange={(e) => setFormData({ ...formData, username: e.target.value })}
                  />
                  <User className="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300" size={20} />
                </div>
              </div>
              <div>
                <label className="block text-gray-700 mb-2" htmlFor="password">
                  Password
                </label>
                <div className="relative group">
                  <input
                    type="password"
                    id="password"
                    className="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-300 group-hover:border-red-300"
                    placeholder="Enter your password"
                    value={formData.password}
                    onChange={(e) => setFormData({ ...formData, password: e.target.value })}
                  />
                  <Lock className="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300" size={20} />
                </div>
              </div>
              <button
                type="submit"
                className="w-full bg-red-500 hover:bg-red-600 text-white py-3 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg"
              >
                Sign In
              </button>
            </form>
          </div>
        </AnimatedCard>
      </div>
    </div>
  );
}