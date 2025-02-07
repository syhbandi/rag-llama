import { useState } from 'react';
import axios from 'axios';

const usePost = (url) => {
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  const postData = async (payload) => {
    setLoading(true);
    setError(null);

    try {
      const response = await axios.post(url, payload);
      setData(response.data); // Simpan hasil response
    } catch (err) {
      setError(err.response?.data || 'An error occurred');
    } finally {
      setLoading(false);
    }
  };

  return { data, loading, error, postData };
};

export default usePost;
