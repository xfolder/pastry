declare namespace App.Http.Resources {
export type IngredientDto = {
id: number;
name: string;
quantity: number | null;
measurement_unit: App.Http.Resources.MeasurementUnitDto | null;
};
export type MeasurementUnitDto = {
id: number;
name: string;
abbreviation: string;
};
export type ProductDto = {
id: number;
name: string;
price: number;
price_in_time: number;
quantity: number;
on_sale: boolean;
saleable: boolean;
images: Array<any>;
ingredients: Array<App.Http.Resources.IngredientDto> | null;
};
}
