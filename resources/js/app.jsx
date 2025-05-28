import React from 'react';
import ReactDOM from 'react-dom/client';
import PostList from './components/PostList';

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(
  <React.StrictMode>
    <PostList />
  </React.StrictMode>
);