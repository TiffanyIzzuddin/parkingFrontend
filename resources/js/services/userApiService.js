import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://localhost:3000/api',
    withCredentials: false,
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});

export default {
    getUsers() {
        return apiClient.get('/users');
    },
    getUser(id) {
        return apiClient.get(`/users/${id}`);
    },
    createUser(user) {
        return apiClient.post('/users', user);
    },
    updateUser(id, user) {
        return apiClient.put(`/users/${id}`, user);
    },
    deleteUser(id) {
        return apiClient.delete(`/users/${id}`);
    }
};
