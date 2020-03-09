# From node image from docker hub repository, latest version
FROM node:latest
# The action to install Node package manager into our container
RUN npm install -g serve
# Copy from local directory to container directory
COPY ./display ./display
# Command needed by image to execute inside container
CMD serve ./display
