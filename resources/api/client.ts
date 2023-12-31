import axios from "axios";

const baseUrl = import.meta.env.VITE_API_URL;

const axiosInstance = axios.create({
    baseURL: baseUrl,
    headers: {
        "Content-Type": "application/json",
    },
    responseType: "json",
});

export const client = {
    async getProducts() {
        return await axiosInstance.get("shop/products").then((response) => {
            return response.data;
        });
    },
    async getProduct(id: bigint) {
        return await axiosInstance.get(`shop/products/${id}`).then((response) => {
            return response.data;
        });
    },
    async searchProducts(query: string, limit: number = 5) {
        return await axiosInstance.post(`shop/products/search`, {query, limit}).then((response) => {
            return response.data;
        });
    }
}
