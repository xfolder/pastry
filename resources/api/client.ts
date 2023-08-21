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
        return await axiosInstance.get("shop/products");
    },
    async getProduct(id: bigint) {
        return await axiosInstance.get(`shop/products/${id}`);
    },
}
