import axios from "axios";

const apiClient = axios.create({
    baseURL: "http://casteaching.test/api",
    withCredentials: false,
    headers: {
        Accept: 'aplication/json',
        'Content-Type': 'aplication/json'
    }
})

export default {
    videos: async function () {
      const response = await apiClient.get('/videos')
      return response.data
    },
}
