FROM node:latest
COPY package.json package.json
RUN npm install
COPY . .
EXPOSE 80
CMD ["node", "server.js"]
