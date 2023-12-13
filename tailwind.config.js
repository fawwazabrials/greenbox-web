/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./app/Views/**/*.php"],
	theme: {
		extend: {},
	},
	plugins: [require("daisyui"), require("@tailwindcss/line-clamp")],

	daisyui: {
		themes: [
			{
				mytheme: {
					primary: "#8800ff",
					secondary: "#d40e00",
					accent: "#0000ff",
					neutral: "#302810",
					"base-100": "#f3f4f6",
					info: "#00b9d5",
					success: "#00da77",
					warning: "#ff8f00",
					error: "#de0009",
				},
			},
		], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
		darkTheme: "mytheme", // name of one of the included themes for dark mode
		base: true, // applies background color and foreground color for root element by default
		styled: true, // include daisyUI colors and design decisions for all components
		utils: true, // adds responsive and modifier utility classes
		prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
		logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
		themeRoot: ":root", // The element that receives theme color CSS variables
	},
};
