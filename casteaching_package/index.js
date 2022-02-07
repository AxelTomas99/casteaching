import axios from "axios";

// Token JPMMApW4My44uADT0l5m1oyh1admwgyMd13gkWoW

const apiClient = axios.create({
    baseURL: "http://casteaching.test/api",
    withCredentials: true,
    headers: {
        Accept: 'aplication/json',
        'Content-Type': 'aplication/json',
        Authorization: 'Bearer JPMMApW4My44uADT0l5m1oyh1admwgyMd13gkWoW'
    }
})

export default {
    videos: async function () {
      const response = await apiClient.get('/videos')
      return response.data
    },
    video: {
        show: async function (id) {
            const response = await apiClient.get('/videos/'+id)
            return response.data
        },
        create: async function (data) {
            const response = await apiClient.post('/videos',data)
            return response.data
        },
        update: async function (id, data) {
            const response = await apiClient.put('/videos/'+id,data)
            return response.data
        },
        destroy: async function (id) {
            const response = await apiClient.delete('/videos/' + id)
            return response.data
        }
    }
}
